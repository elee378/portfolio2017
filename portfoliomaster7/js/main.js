(function () {
  // start with retrieving the elements from the page, and then adding event handling. then write the logic. refer to the seasons example / homework
  var images = document.querySelectorAll('.image-holder');

  function getPort(){
    let thumbHolder = document.querySelector('.subImagesContainer');
    const filter = this.id;
    let url = './admin/scripts/functions.php?filter=' + filter; // id of the element clicked on

    //the fetch API uses new Javascript Promise API
    fetch(url) //do an ajax call with fetch
      .then((resp) => resp.json()) // convert to json
      .then((data) => {
        //debugger;

        // this makes the thumbnails appear
		thumbHolder.innerHTML = "";
      data.forEach(thumb => {
       let thumbImages = `<li role="button" data-dbfilter="${filter}" id="${thumb.portfolio_id}">
                               <img src="img/${thumb.portfolio_images}" alt="portfolio_thumb" class="thumb rsponsive">
                           </li>`;

        thumbHolder.innerHTML += thumbImages; // add each LI back to the UL in index.html (line 44)
        thumbHolder.querySelectorAll('li').forEach((thumb) => thumb.addEventListener('click', getLightbox));
      });

      }) // call the process function passing the data
      .catch(function(error){
        //catch ANY error and report it to console
        console.log(error);
      });
  }

function getLightbox(){
  let lightboxHolder = document.querySelector('.lightbox');
  let thumbHolder = document.querySelector('.subImagesContainer');
  const filter = this.id;
	let url = './admin/scripts/functions.php?getOne=' + filter;
    //the fetch API uses new Javascript Promise API
    fetch(url) //do an ajax call with fetch
      .then((resp) => resp.json()) // convert to json
      .then((data) => {
        //target lightbox stuff and set classes
        let lightbox = '<div id="lightbox_content"><div id="close">&times;</div><p>'+data.portfolio_imageDescription+'</p><img src="img/'+data.portfolio_imagesLightbox+'" <p></p>'
		    document.getElementById('lightbox').innerHTML = lightbox;
        thumbHolder.querySelectorAll('li').forEach((thumb) => thumb.addEventListener('click', getLightbox));
		    document.getElementById('lightbox').className = 'open';
		    document.getElementById('close').addEventListener('click', function(){
			  document.getElementById('lightbox').className = '';
		});

		document.getElementById('lightbox').addEventListener('click', function(e){
			if(e.target.id == 'lightbox'){
				document.getElementById('lightbox').className = '';
			}
		});

  }) // call the process function passing the data
  .catch(function(error){
  //catch ANY error and report it to console
  console.log(error);
});
}

  images.forEach(function(img, index){
  img.addEventListener('click', getPort, false);
  });
})();











































































































// (function(){
// 	"use strict";
// 	console.log("SEAF Fired");

// 	var theImages = document.querySelectorAll('.image-holder'),
// 			theHeading = document.querySelector('.featured'),
// 			theSubhead = document.querySelector('.main-copy h2'),
// 			theSeasonText = document.querySelector('.main-copy p'),
// 			appliedClass;

// 			// i want to change all the content on the page
// 			function changeElements(){
// 				//debugger; //this is a special term that stops code execution, can be used for testing
// 				let subImages = document.querySelector('.subImagesContainer');
// 				let objectIndex = dynamicContent[this.id];

// 				//remove duplicate images
// 				while (subImages.firstChild) {
// 					subImages.removeChild(subImages.firstChild);
// 				}

// 				//add the images to the bottom of the page
// 				objectIndex.images.forEach(function(image, index) {
// 					//create and image element
// 					let newSubImg = document.createElement('img');
// 					//add a css class to it
// 					newSubImg.classList.add('thumb');
// 					//set the src
// 					newSubImg.src = "img/" + objectIndex.images[index];

// 					newSubImg.dataset.index = index;

// 					//add an event handler to trigger a lightbox
// 					newSubImg.addEventListener('click', function() { popLightbox(index, objectIndex); }, false);

// 					//add it to the page
// 					subImages.appendChild(newSubImg);
// 				});


// 				//remove the colours we applied on the last click
// 				theSubhead.classList.remove(appliedClass);
// 				theHeading.classList.remove(appliedClass);

// 				//change the text using the values of the properties in the object
// 				theSubhead.firstChild.nodeValue = objectIndex.headline;
// 				theSeasonText.firstChild.nodeValue = objectIndex.text;

// 				//adding the content from contentObject.js
// 				theSubhead.classList.add(this.id);
// 				theHeading.classList.add(this.id);

// 				appliedClass = this.id;
// 			}

// 			theImages.forEach(function (image, index){ //for loop for "theImages"
// 				//add an event handler for each image
// 				image.addEventListener('click', changeElements, false);
// 			});

// 			//trigger the lightbox
// 			function popLightbox(currentIndex, currentObject){
// 				//debugger;
// 				//move the window to the top every time we click - quick bug fix
// 				// window.scrollTo(0, 0);
// 				document.body.style.overflow = "hidden";
// 				let lightbox = document.querySelector('.lightbox');
// 				let lightboxImg = lightbox.querySelector('img');
// 				let lightboxDesc = lightbox.querySelector('p');
// 				let lightBoxClose = document.querySelector('.close-lightbox');

// 				lightbox.style.display = "block";
// 				lightboxImg.src = "img/" + currentObject.imagesLightbox[currentIndex];
// 				lightboxDesc.innerHTML = currentObject.imageDescription[currentIndex];

// 				lightBoxClose.addEventListener('click', closeLightbox, false);
// 			}

// 			function closeLightbox(){
// 				//reset everything, close the lightbox
// 				//debugger;
// 				document.body.style.overflow = null;
// 				let lightbox = document.querySelector('.lightbox');
// 				let lightboxImg = lightbox.querySelector('img');
// 				let lightboxDesc = lightbox.querySelector('p');

// 				lightbox.style.display = "none";
// 				lightboxImg.src = "#";
// 				lightboxDesc.innerHTML = "";
// 			}

// 			//trigger web on page load
// 			//document.querySelector('#web').click();
// 			changeElements.call(document.querySelector('#all'));

// })();
