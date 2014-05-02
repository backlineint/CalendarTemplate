 	// JavaScript Document - snippet of harvard.js focused on monthly calendar view

(function ($) {

/**
 *
 * jQuery Random plugin
 *
 * @author   Michel Belleville <michel.belleville@gmail.com>
 * @version  1.1.0
 * @requires jQuery v1.3.2 or later
 * @license  GPLv3 [http://www.gnu.org/licenses/gpl.html]
 * 
 * @description Picks element(s) at random in a selection.
 * @param integer num (optional) number of elements to pick
 * 
 * Use :
 * $('#whatever .you .like').random();
 * $('.you_can_event select .more_than_one').random(10);
 * 
 */

  jQuery.fn.random = function(num) {
    num = parseInt(num);
    if (num > this.length) return this.pushStack(this);
    if (! num || num < 1) num = 1;
    var to_take = new Array();
    this.each(function(i) { to_take.push(i); });
    var to_keep = new Array();
    var invert = num > (this.length / 2);
    if (invert) num = this.length - num;
    for (; num > 0; num--) {
      for (var i = parseInt(Math.random() * to_take.length); i > 0; i--)
        to_take.push(to_take.shift());
      to_keep.push(to_take.shift());
    }
    if (invert) to_keep = to_take;
    return this.filter(function(i) { return $.inArray(i, to_keep) != -1; });
  };

 $(document).ready(function(){
	
// only run the code below if the calendar is being rendered
var is_calendar = $(".calendar-calendar").length;
if (is_calendar > 0) {
	
	// New code for updated calendar
	
	// *** This section adds all calendar items to the date div ***
	
	// Get all the calendar items.
	$("[date][class*='multi-day']").each(function (i) {
    // Store the date for the calendar item.
    var div_date = $(this).attr('date');
    // Find a date label with a matching date and append the calendar item.
    $("[date='"+div_date+"']").not('.no-entry').not('.multi-day').addClass("has_calendar_item");
    $("[date='"+div_date+"']").not('.no-entry').not('.multi-day').append(this);
    });  
        
	// Insert HTML into the date boxes without calendar items.
	$("[date]").not(".has_calendar_item, .empty, .multi-day").append('<div class = "no_calendar_item"><p class = "no_event_text">no events</p></div>');
            
	// *** This section randomly selects one of the calendar items and hides the rest. ***     
      
	// Get the date boxes with calendar items - for all past and future days.
	$("[date][class='multi-day']").parents("[date]").each(function (i) {
     	// store the date for the calendar item
     	var div_date = $(this).attr('date');
		// Find out how many results we're working with
      	var count = $("[date='"+div_date+"'][class='multi-day']").length;
      	// If there is more than one calendar item, hide all but one.
      	if (count > 1) {
      	$("[date='"+div_date+"'][class='multi-day']").random(count-1).addClass("hide_calendar_item");
      	}
	});

	// Get the date boxes with calendar items - for current day.
	$("[date][class='multi-day starts-today ends-today']").parents("[date]").each(function (i) {
     	// store the date for the calendar item
     	var div_date = $(this).attr('date');
		// Find out how many results we're working with
      	var count = $("[date='"+div_date+"'][class='multi-day starts-today ends-today']").length;
      	// If there is more than one calendar item, hide all but one.
      	if (count > 1) {
      	$("[date='"+div_date+"'][class='multi-day starts-today ends-today']").random(count-1).addClass("hide_calendar_item");
      	}
	});
	
	// *** Add the current day to the selected section ***  
	
	var is_current_month = $("[date][class*='today']").length;
	if (is_current_month > 0) {
		$('#selected_date_detail').empty();  // TODO - Update the template so this step is not necessary.
		$("[date][class*='today']").parents("[date][class*='date-box']").addClass("selected_date");	
		$("[date][class*='today']").children("[class*='multi-day']").clone().appendTo('#selected_date_detail');
		$('#selected_date_detail:empty').append('<p>There are no events today. Please select another date from the calendar.</p>');
	}
	// If the current day has a display title, format it.
	if ($('#selected_date_detail').find("[class*='display_title_link']")) {
		// Get the link for the regular title.
		var title_href = $('#selected_date_detail').find("[class*='display_title_link']").siblings("a").attr("href");
		// Apply the link to the display title
		$('#selected_date_detail').find("[class*='display_title_link']").attr("href", title_href);
		$('#selected_date_detail').find("[class*='display_title_link']").siblings("a").hide();
	}
	
    // *** Onclick add all events for a date to the sidebar.  ***
    // a.) Onclick for images
    
    // Get all calendar items.
    $('.calendar.monthview').click(function () { 
	// Clear the landing area.
	$('#selected_date_detail').empty();
	// Clear the highlighted date in the calendar
	$('.selected_date').removeClass("selected_date");
	// Highlight the selected date in the calendar
	$(this).parents("[date][class*='date-box']").addClass("selected_date");	
	// Get the date of the selected calendar item.
	var selected_date = $(this).parents('[date]').attr('date');
	// Add all calendar items to the landing area
	$("[date='"+selected_date+"'][class*='multi-day']").clone().appendTo('#selected_date_detail');
	// Show the hidden calendar items.
	$('#selected_date_detail').children("[class*='multi-day']").removeClass("hide_calendar_item");
	$('#selected_date_detail').children("[class*='multi-day']").css("float","left");
	// If a display title exists… 
	if ($('#selected_date_detail').find("[class*='display_title_link']")) {
		// Get the link for the regular title.
		var title_href = $('#selected_date_detail').find("[class*='display_title_link']").siblings("a").attr("href");
		// Apply the link to the display title
		$('#selected_date_detail').find("[class*='display_title_link']").attr("href", title_href);
		$('#selected_date_detail').find("[class*='display_title_link']").siblings("a").hide();
	}
    });	
    
    // b.) Onclick for dates.
    
    // Get all date labels.
    $('.month.day').click(function () { 
	// Clear the landing area.
	$('#selected_date_detail').empty();
	// Clear the highlighted date in the calendar
	$('.selected_date').removeClass("selected_date");
	// Highlight the selected date in the calendar
	$(this).parents("[date][class*='date-box']").addClass("selected_date");
	// Get the date of the selected calendar item.
	var selected_date = $(this).parents('[date]').attr('date');
 	// Add all calendar items to the landing area
	$("[date='"+selected_date+"'][class*='multi-day']").clone().appendTo('#selected_date_detail');
	// Show the hidden calendar items.
	$('#selected_date_detail').children("[class*='multi-day']").removeClass("hide_calendar_item");
	$('#selected_date_detail').children("[class*='multi-day']").css("float","left");
	$('#selected_date_detail:empty').append("<p>There are no events on the selected date.</p>");
	// If a display title exists… 
	if ($('#selected_date_detail').find("[class*='display_title_link']")) {
		// Get the link for the regular title.
		var title_href = $('#selected_date_detail').find("[class*='display_title_link']").siblings("a").attr("href");
		// Apply the link to the display title
		$('#selected_date_detail').find("[class*='display_title_link']").attr("href", title_href);
		$('#selected_date_detail').find("[class*='display_title_link']").siblings("a").hide();
	}
    });	

    // b.) Onclick for no events text.
    
    // Get all date labels.
    $('.no_event_text').click(function () { 
	// Clear the landing area.
	$('#selected_date_detail').empty();
	// Clear the highlighted date in the calendar
	$('.selected_date').removeClass("selected_date");
	// Highlight the selected date in the calendar
	$(this).parents("[date][class*='date-box']").addClass("selected_date");
	// Get the date of the selected calendar item.
	var selected_date = $(this).parents('[date]').attr('date');
 	// Add all calendar items to the landing area
	$("[date='"+selected_date+"'][class*='multi-day']").clone().appendTo('#selected_date_detail');
	// Show the hidden calendar items.
	$('#selected_date_detail').children("[class*='multi-day']").removeClass("hide_calendar_item");
	$('#selected_date_detail').children("[class*='multi-day']").css("float","left");
	$('#selected_date_detail:empty').append("<p>There are no events on the selected date.</p>");
    });	
    
} // End calendar specific code    

});
})(jQuery);