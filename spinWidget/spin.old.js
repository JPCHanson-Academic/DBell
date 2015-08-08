/**
 * 
 */
//--------------------------------------------------------------WIDGIT INITIALISATION
/**
 * initialise the widget
 */
function initSpinWidget(noOfSegs, activateSelector, resultSelector, imgSelector, imgURL)
{ 		
	spinAngle = 0;
	startAngle = 0;
	noOfSegments = noOfSegs;
	buttonSelector = activateSelector;
	resultTag = resultSelector;
	imageSelector = imgSelector;
	url = imgURL;
	
	var div = document.getElementByTagName('head').innerHTML;
	div.innerHTML=div.innerHTML + 'test';
}
//--------------------------------------------------------ENDOF WIDGET INITIALISATION




//--------------------------------------------------------------------------FUNCTIONS
//-------------------------------activate by button functions
/**
 * rotate the image  by an angle equivalent to 7 full rotations, plus an angle
 * equal to the number of degrees in a segment (so that the spin ends in the 
 * center of a segment)
 */
function randomSelector()
{
	$(imageSelector).css("transition", "all 2.5s ease-in-out");
	
	var degPerSeg = 360/noOfSegments;
	
	spinAngle += ((((Math.floor(Math.random()*12))+1)*30)+2520);
	//console.log(  spinAngle +"'"+ ((((Math.floor(Math.random()*12))+1)*30)+2520)   ); //this works fine
	doSpin(spinAngle);
	
	updateResults("you randomly selected, ", noOfSegments);
}

/**
 * apply a rotation to the 'class=wheel' element
 * @param angle amount of degrees to rotate the image by
 */
function doSpin(angle)
{
	$(document).ready(function(){
		/** rotate wheel class element by spinAngle number of degrees **/
		$(imageSelector).css("transform", "rotate("+ angle +"deg)");
	});
}

/**
 *  calculate the segment that the spin lands on
 */
function calculateResultSegment()
{
	var extraDegrees = (spinAngle % 360);
	var degPerSeg = 360/noOfSegments;
	var resultSegment = ((extraDegrees/degPerSeg)+1);				
	
	if(Math.round(resultSegment)==13){return 1;}
	return Math.round(resultSegment);
}

/**
 * updates the result element with the text provided and the calculated
 * segment.
 */
function updateResults(text)
{
$(document).ready(function(){	
	$(resultTag).fadeOut(2000,function(){
		$(resultTag).text(
							text +"persona "
							+ calculateResultSegment(noOfSegments)
						 );
		});
		$(resultTag).fadeIn(1000);
	});
}


//------------------------------------activate by drag functions
/**
 * rotate the image based on touch or mouse events
 */
function dragSelector(event, startAngle)
{
	$(imageSelector).css("transition", "none");
	
	var imageCenter = calculateImgCenter();
	
		console.log(event.pageX - startAngle);
		console.log(imageCenter);
		doSpin(event.pageX+startAngle);
}

/**
 *  calculate the centre of the 
 */
function calculateImgCenter()
{
	var centre;
	var position;
	var height;
	var width;
	
	$(document).ready(function(){
		position = $(imageSelector).position();
		height = $(imageSelector).height();
		width = $(imageSelector).width();
	
	
	centre = {X:(position.left + (width*0.5)), Y:(position.top + (height*0.5))};
	
	});
	return centre;  
}
//--------------------------------------------------------------------ENDOF FUNCTIONS

//--------------------------------------------------------------------EVENT LISTENERS
/**
 * an on click event listener, which attaches to whatever selector chosen in the 
 * activateSelector parameter of the initSpinWidget function.
 */
$(document).ready(function(){
	$(buttonSelector).on("click", function(){
		randomSelector();
	});
});

/**
 *  a set of mouse event listeners, attached to the imageSelector, this listens for
 * mousedown event within the imageSelector, and attached a mousemove event to it.
 * on getting a mouseup signal it detaches the mousemove event from the document.
 */ 
// $(document).ready(function(){
  // $(imageSelector).on("mousedown", function(event){
//   	
	  // startAngle = event.pageX;
// 	  
    // $(document).on("mousemove",function(event){
//     	
		// dragSelector(event, event.pageX - startAngle);       
    // });
//     
    // $(document).on("mouseup", function(event){
// 
    	// $(document).off("mousemove");
    	// spinAngle = spinAngle + (event.pageX - startAngle); //causing problems
//     	
  	// });
  	// updateResults("you chose: ");
  // });
// });

// /**
 // * touch selectors
 // */
// $(document).ready(function(){
  // $(imageSelector).on("touchstart", function(event){
    // $(document).on("touchmove",function(event){
		// dragSelector(event); 
    // });
  // });
//   
  // $(document).on("touchend", function(event){
    // $(document).off("touchmove");
  // });
// });

//--------------------------------------------------------------ENDOF EVENT LISTENERS

//-------------------------------------------------------------------------CSS TWEAKS
/**
 * 
 * To avoid having a seperate CSS file that would need to be included, all css
 * modifications are stored in this section.
 */
$(document).ready(function(){
	
	$(imageSelector).css({
						"background-image": "url("+url+")",
						"background-size":"contain",
						"background-repeat":"no-repeat",
						"width":"350px",
						"height":"350px"
					   });
});
//-------------------------------------------------------------------ENDOF CSS TWEAKS
