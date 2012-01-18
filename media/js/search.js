/*
 * Get users location from localStorage or geolocation
 * Get list of latest searches
 * Listen to form submit and load the results
 */
$(function(){
	//Check if there's a saved position
	var position = getSavedPosition();
	
	//Search for saved location
	if(position !== false)
	{
		loadCoordSearch(position[0], position[1]);
	}
	
	//Else, get geolocation if supported	
	else if (navigator.geolocation) {
		//Get location
	  	navigator.geolocation.getCurrentPosition(function(position) {
	    	//Save coords
	    	var pos = position;
	    	var latitude = pos['coords']['latitude'];
	    	var longitude = pos['coords']['longitude'];
	    	
	    	//Search for the location
	    	loadCoordSearch(latitude, longitude);
	    	//Save position
	    	savePosition(latitude, longitude);
	    	
	    	//An error occurred
	    	}, function(error) {
		    alert('Your location could not be retrieved. Please search for a location.');
			console.log(error);
		    }
	  	);
	}
	
	//Retrived lates searches
	getSearches();
	
	//Load search results and save search on submit
	$('form').submit(function(e) {
		e.preventDefault();
		loadSearchResults($('#searchInput').val());
		saveSearch($('#searchInput').val());
	});
});

/*
 * Ajax call to search for a location with coordinates
 */
var loadCoordSearch = function(_lat, _long){
	if(isNumeric(_lat) && isNumeric(_long)){
		var url2 = '/weather/search?lat=' + _lat + '&long=' + _long;
		
		$.ajaxSetup({
			url : url2,
			type : "GET",
		});
		$.ajax({
			success : function(data) {
				loadForecast(data);
			},
			error : function(object, error) {
				alert('A problem occurred when trying to determine your position. Please try searching for a location.');
			}
		})	
	}
	else{
		alert('A problem occurred when trying to determine your position. Please try searching for a location.');
	}
};

/*
 * Ajax call to search for a location
 */
var loadSearchResults = function(_s){
	var url2 = '/weather/search/' + _s;
	
	$.ajaxSetup({
		url : url2,
		type : "GET",
	});
	$.ajax({
		success : function(data) {
			handleSearchData(data);
			getSearches();
		},
		error : function(object, error) {
			errorSearchMessage('No search results.');	
		}
	})	
};

var errorSearchMessage = function(message){
	$('#searchResult').empty();
	$('#searchForm').after('<div id="searchResult"></div>');
	$('#searchResult').append(message);
};

/*
 * Clear current search result
 * Add new result to container
 * Add Clear results-link
 * Load forecast on location-click
 * Load next/previous page on pagination-click
 */
var handleSearchData = function(data){
	$('#searchResult').remove();
	$('#searchForm').after('<div id="searchResult"></div>');
	$('#clearSearchResult').remove();
	
	$('#searchResult').append(data);
	
	$('#searchForm').after('<a href="#" id="clearSearchResult">Clear search results</a>');
	
	$('.chooseLocationLink').click(function(e) {
		e.preventDefault();
		loadForecast($(this).attr('id'));
		var new_position = $('#forecast').offset();
		window.scrollTo(new_position.left,new_position.top);
	});
	
	if($("#searchResult li").length === 1)
	{
		$(".chooseLocationLink").click();
		$('#searchResult').remove();
		$('#clearSearchResult').remove();
	}
	
	$('#clearSearchResult').click(function(){
		$('#searchResult').remove();
		$(this).remove();
	});
	
	getSearches();
	
	$('.paginationLinkPrev').click(function(e) {
		e.preventDefault();
		loadSearchResults($(this).attr('id'));
	});
	
	$('.paginationLinkNext').click(function(e) {
		e.preventDefault();
		loadSearchResults($(this).attr('id'));
	});
	
};

/*
 * Save search to a new or existing array
 * Save array in localStorage
 */
var saveSearch = function(searchInput){
	if(typeof(localStorage) == 'undefined'){
		
	}
	else{
		//Save to existing array
		if(localStorage.getItem('weatherSearches'))
		{
			//Split string into an array
			var searches = localStorage.getItem('weatherSearches').split(',');
			//Save index to see if search already exists
			var index = jQuery.inArray(searchInput, searches);
			
			//Remove old search entry if it exists
			if(index >= 0)
			{
				searches.splice(index, 1);
			}
			
			//Add search to beginning of array
			searches.splice(0, 0, searchInput);
			
			//Remove oldest entry if array contains more than 10 searches
			if(searches.length >= 10)
			{
				searches = searches.slice(0,10);
			}
			//Save array to localStorage
			localStorage.setItem('weatherSearches', searches);
		}
		//Save first entry
		else{
			localStorage.setItem('weatherSearches', searchInput);
		}
	}
};

/*
 * Get latest searches from localStorage if they exist
 * Add select with searches as options
 * Make new search on select change
 */
var getSearches = function(){
	if(typeof(localStorage) == 'undefined'){
		
	}
	else{
		if(localStorage.getItem('weatherSearches')){
			$('#latestSearchesList').remove();
			
			var searches = localStorage.getItem('weatherSearches').split(',');
			
			if(searches.length > 0){
				$('#searchForm form').before('<select id="latestSearchesList">');
				$('#latestSearchesList').append('<option value="latest" disabled="disabled" selected="selected">Latest searches</option>');
				for (var i in searches)
				{
					$('#latestSearchesList').append('<option value="' + searches[i] + '">' + searches[i] + '</option>');
				}
				$('#latestSearchesList').after('</select>');
			}
			
			$('#latestSearchesList').change(function(e){
				$('#searchInput').val($('#latestSearchesList option:selected').text());
				loadSearchResults($('#latestSearchesList option:selected').text());
			});
		}
	}
};


//Save position to localStorage
var savePosition = function(latitude, longitude){
	var position = [latitude, longitude];
	if(typeof(localStorage) == 'undefined'){
		
	}
	else{
		localStorage.setItem('weatherAppPosition', position);
	}
};

//Ged saved position
var getSavedPosition = function(){
	if(typeof(localStorage) == 'undefined'){
		
	}
	else{
		if(localStorage.getItem('weatherAppPosition'))
		{
			var position = localStorage.getItem('weatherAppPosition').split(',');
			return position;
		}
		else{
			return false;
		}
	}
};
