/*
 * Create div to hold favorites
 * Display favorites
 */
$(function(){
	$('#searchForm').before('<div id="favorites"></div>');
	getFavorites();
});


/*
 * Listen to click event on Add to favorites-link
 */
var favoriteLinks = function(){
	$('.addFavoriteLink').click(function(e){
		e.preventDefault();
		addFavorite(this.id);
		getFavorites();
	});

};

/*
 * Add a favorite to a new or existing array
 * Save array in localStorage
 */
var addFavorite = function(location){
	if(typeof(localStorage) == 'undefined'){
		
	}
	else{
		//Modify existing localStorage data
		if(localStorage.getItem('weatherFavorites'))
		{
			//Split string into an array
			var favorites = localStorage.getItem('weatherFavorites').split(',');
			
			//Save index to see if favorite already in array
			var index = jQuery.inArray(location, favorites);
			
			//If favorite exists
			if(index >= 0)
			{
				alert('The location is already in your favorites.');
			}
			//Add favorite
			else{
				//Add favorite to beginning of array
				favorites.splice(0, 0, location);
				
				//Slice array at the end if it is >= 10
				if(favorites.length >= 10)
				{
					favorites = favorites.slice(0,10);
				}
				
				//Save array to localStorage
				localStorage.setItem('weatherFavorites', favorites);
			}
		}
		//Or add new data
		else{
			localStorage.setItem('weatherFavorites', location);
		}
	}
};

/*
 * Get favorites from localStorage
 * Display them as a list
 * Add links to display forecast
 * Add links to remove favorite
 */
var getFavorites = function(){
	if(typeof(localStorage) == 'undefined'){
		
	}
	else{
		//Can only get items if they exist
		if(localStorage.getItem('weatherFavorites')){
			//Clear existing container
			$('#favorites').empty();
			
			//Save data to array
			var favorites = localStorage.getItem('weatherFavorites').split(',');
			
			//Check if the array contains elements
			if(favorites.length > 0){
				//Begin list
				$('#favorites').append('<h2>Favorites</h2><ul id="favoritesList">');
				
				for (var i in favorites)
				{
					//String from localStorage "country/region/city"
					//Split into array and reverse it
					var location = favorites[i].split('/');
					location.reverse();
					
					//Add list items as "city, region, country"
					$('#favoritesList').append('<li><a href="#" class="favoriteLink" id="' + favorites[i] + '">' + location[0] + ', ' + location[1] + ', ' + location[2] + '</a> <a href="#" class="removeFavoriteLink" id="' + favorites[i] + '">Remove</a></li>');
				}
				//Close list
				$('#favorites').append('</ul>');
				
				//Load forecast on click
				$('.favoriteLink').click(function(){
					loadForecast(this.id);
				});
				
				//Remove favorite on click
				$('.removeFavoriteLink').click(function(){
					removeFavorite(this.id);
				});
			
			}
		}
	}
}

/*
 * Remove specific favorite from localStorage and reload the list
 */
var removeFavorite = function(favorite){
	if(typeof(localStorage) == 'undefined'){
		
	}
	else{
		//See if any favorites exist
		if(localStorage.getItem('weatherFavorites'))
		{
			//Save data to array
			var favorites = localStorage.getItem('weatherFavorites').split(',');
			//Get index of specified favorite
			var index = jQuery.inArray(favorite, favorites);
			
			//Check if the favorite exists in the array
			if(index > 0)
			{
				//Remove favorite
				favorites.splice(index,1);
				
				//Save modified array to localStorage
				localStorage.setItem('weatherFavorites', favorites);
			}
			
			else if(index === 0)
			{
				localStorage.removeItem('weatherFavorites');
				$('#favorites').empty();
			}
			//Reload list
			getFavorites();
		}
	}
};
