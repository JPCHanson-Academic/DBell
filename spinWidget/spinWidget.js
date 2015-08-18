// STARTOF FILE
/** CLASS SPINWIDGET
 * prototype for the creation of a self contained spinWidget object. In order to activate
 * this widget call 'new' on it from inside the <head></head>  section of your document,
 * and provide it with appropriate construction arguments (see below). from there on in 
 * the process should be self explanatory.
 * 
 * @author JPC Hanson
 * 
 * 
 * @param noOfSegs (int) the number of segments the spinWidget should have. Note that
 * this parameter has nothing to do with the graphical look of the widget it is used
 * only so that the widget can calculate the correct result segment.
 * 
 * @param resultSelector (String) this parameter takes a string CSS selector e.g. 
 * '.myClass' or '#myID' etc and the element corresponding to this selector will have its
 * inner html modified to contain the result of the spinWidget selection.
 * 
 * @param imgSelector (String) this parameter takes a string CSS selector e.g. 
 * '.myClass' or '#myId' etc, the element pointed to by this selector will be the anchor
 * for the widget (probably best to use a div unless it is absolutely necessary to use
 * 	something else)
 * 
 * @param imgURL (String) path to the image you wish to use as your spinning face. for 
 * the widget to be accurate the image provided must have the same number of segments
 * as those provided in the first parameter to this object (noOfSegs) or you will get
 * some funky answers.
 */
function spinWidget(noOfSegs, resultSelector, imgSelector, imgURL)
{
	/******************************* PRIVATE VARS ********************************/
	var noOfSegments = noOfSegs;
	var resultTag = resultSelector;
	var imageSelector = imgSelector;
	var url = imgURL;
	/***************************** ENDOF PRIVATE VARS ****************************/
	
	/******************************** MAIN METHOD ********************************/
	/**
	 * Entry point of the program, calls as soon as the object is created
	 */
	Main();
	function Main()
	{
		setUpCSS();
		setUpPropellorJS();
	}
	/***************************** ENDOF MAIN METHOD ******************************/
	
	/****************************** PRIVATE METHODS *******************************/	
	/**
	 * this widget relies on propeller.js and this method does the setup for that.
	 * within this setup it also defines two callbacks masked as propeller.js
	 * options: onStop and onDragStop, which fire when the wheel stops spinning and
	 * when the user lets go of the mouse button repsectively. it is worth noting that
	 * the onStop callback option only fires when the spinning element has some momentum,
	 * and also that the onDragStop callback option appears to fire twice.
	 * (propeller.js available from https://github.com/PixelsCommander/Propeller)
	 */
	function setUpPropellorJS()
	{
		$(document).ready(function()
		{
			$(imageSelector).propeller(
				{	
					inertia: 0.99, 
					speed: 0,
					minimalSpeed: 0.97,
					step:(360/noOfSegments),
					stepTransitionTime: 100,
					stepTransitionEasing: 'linear',
					onStop: function()
					{
						calculateResults(this.angle,this.speed, "randomly selected");
					},
					onDragStop:function()
					{
						calculateResults(this.angle,this.speed, "selected");
					}
				});
		});
	}
	
	/**
	 * this method does some basic CSS setup for the widget like setting the image
	 * and element size.
	 */
	function setUpCSS()
	{
		$(document).ready(function()
		{
			$(imageSelector).css({
						"background-image": "url("+url+")",
						"background-size":"contain",
						"background-repeat":"no-repeat",
						"width":"350px",
						"height":"350px"
					   			});
		});
	}
	
	/**
	 * this takes an angle and a speed and calculates the result segment based on
	 * these values.
	 * @param angle (float) the current angle of the spun element 
	 * @param speed (float) the current angular velocity of the element 
	 */
	function calculateResults(angle,speed, randomOrSelect)
	{
		var extraDegrees = (angle % 360);
		var degPerSeg = 360/noOfSegments;
		var resultSegment = ((extraDegrees/degPerSeg)+1);		
		var resultText = "you "+randomOrSelect+" persona ";
	
		if(Math.abs(speed)<1)
		{
			if(Math.round(resultSegment)==13)
				{updateResultsSegment(resultText + 1);}
			else
				{ updateResultsSegment(resultText + Math.round(resultSegment));}
		}
	} 
	
	/**
	 * updates the chosen result selector (from object initialisation) with the
	 * results of the spin/selection
	 */
	function updateResultsSegment(results)
	{
		$(document).ready(function()
		{	
			$(resultTag).fadeOut(500,function()
			{
				$(resultTag).text(results);
			});
			$(resultTag).fadeIn(500);
		});
	}
	/************************** ENDOF PRIVATE METHODS *****************************/
}
// ENDOF FILE