<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link rel="stylesheet" href="{{asset('css/styles.css')}}">
<link rel="stylesheet" href="{{asset('css/tstyles.css')}}">
<link rel="stylesheet" href="{{asset('css/example.css')}}">
<link rel="stylesheet" href="{{asset('css/jquery-order-form.css')}}">
<link rel="stylesheet" href="{{asset('css/jquery-price-calculator-pro.css')}}">

<?php header("Cache-Control: no-cache, must-revalidate"); ?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.10.13/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/dataTables.material.min.css">
<script type="text/javascript" src="js/ui.spinner.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{asset('css/jquery.datetimepicker.css')}}" >


<style>
.call-action span small {
    color: #626262 !important;
  }
</style>
@yield('metas')


<script type="text/javascript">

/******************************************/
/* Dashboard chart script starts */
/******************************************/

google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Action', 'Count'],
          ['Review',     1],
          ['Quote',      1],
          ['Orders',  1],
          ['Files', 1],
        ]);

        var options = {
          title: 'My Daily Activities',
          pieHole: 0.4,
          chartArea:{left:20,top:40,width:'50%',height:'75%'},
          'backgroundColor.stroke': '#ccc',
          'backgroundColor.strokeWidth': '1'
        };

        var chart = new google.visualization.PieChart(document.getElementById('pieChart'));
        chart.draw(data, options);
      }

google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

      var data = new google.visualization.DataTable();
      data.addColumn('timeofday', 'Time of Day');
      data.addColumn('number', 'Experience');

      data.addRows([
        [{v: [8, 0, 0], f: '1'}, 1],
        [{v: [9, 0, 0], f: '1'}, 2],
      ]);

      var options = {
        title: 'Overall Statistics Of Orders',
        hAxis: {
          title: 'Time Order Placed',
          format: 'h:mm a',
          viewWindow: {
            min: [7, 30, 0],
            max: [17, 30, 0]
          }
        },
        vAxis: {
          title: 'Rating (scale of 1-10)'
        }
      };

      var chart = new google.visualization.ColumnChart(
        document.getElementById('columnChart'));

      chart.draw(data, options);
    }


/* column chart */





/******************************************/
/* Dashboard chart script ends */
/******************************************/    
</script>


</head>
<body>
<header>

</header>
@yield('body')


<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="{{asset('js/app.js')}}"></script> 
<script src="{{asset('js/selectFx.js')}}"></script> 
<script src="{{asset('js/classie.js')}}"></script> 
<script src="{{asset('js/scripts.js')}}"></script> 
<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.material.min.js"></script>
<script src="{{ asset('js/jquery.datetimepicker.full.min.js') }}"></script>
<script src="{{asset('js/tscripts.js')}}"></script>




<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<script type="text/javascript">
$(document).ready(function() {
    $( function() {
   	 $( "#datepicker" ).datepicker();
  	} );
  
    // Setup - add a text input to each footer cell
    $('#example tfoot th').each( function () {
        var title = $(this).text();
        if (title === "Start date") {
            $(this).html( '<input type="text" id="datepicker" placeholder="Search '+title+'" />' );
            }
            else {
								$(this).html( '<input type="text" placeholder="Search '+title+'" />' );
            }
    } );

    // DataTable
    var table = $('.dash-data-table').DataTable( {
        columnDefs: [
            {
                targets: [ 0, 1, 2 ],
                className: 'mdl-data-table__cell--non-numeric'
            }
        ]
    } );


} );






</script>
<script type="text/javascript">
$(function(){
    	var form = $('#jquery-order-form');

form.find('span.staticPrice').remove();

form.on('submit', function(event){
    event.preventDefault();
    var modal = $('<div class="modal hide fade" id="add-options-modal"><div class="modal-header"><a class="close" data-dismiss="modal">&times;</a>            <h2>Oops! Form Submission Disabled</h2></div><div class="modal-body"><p>jQuery Price Calculator Pro is designed to be added on top of an existing order form, and it does not include form submission functionality. If you require submit via email functionality, it is worth looking at <a href="http://codecanyon.net/item/jquery-order-form-builder/485086">jQuery Order Form Builder</a>, which creates fully functional orders forms, and includes jQuery Price Calculator Pro.</p></div><div class="modal-footer">            <a href="#" data-dismiss="modal" class="btn btn-primary add">Okay</a></div></div>');
    modal.appendTo("body");
    modal.modal();
});

	form.jPrice({
	    "floatSub": true,
	    "showPricesOption": true,
	    "itemize": true,
	    "showZeroAs": "false",
	    "subAlign": "right",
	    "decimalSep": ".",
	    "pricesFadeTime": "",
	    "emptySummaryText": "<p>Please configure your order...<\/p>",
	    "showPrices": true,
	    "signBefore": "$",
	    "signAfter": " AUD",
	    "items": {
	        "f_1": "Radio Buttons",
	        "f_2[]": "Checkboxes",
	        "f_3": "Slider",
	        "f_4": "File",
	        "f_5": "Name",
	        "f_6": "Email",
	        "f_7": "RB Group",
	        "f_8[]": "CB Group",
	        "f_9": "Slider",
	        "f_10": "Spinner",
	        "f_11": "Drop Down",
	        "f_12[]": "Multi Select",
	        "f_13": "Single Line Text",
	        "f_14": "Multi Line Text",
	        "q_1": "Quantity"
	    },
	    "pricesOverPeriod": [{
	        divider: 12,
	        title: 'Over 12 Months',
	        suffix: '/mth'
	    },{
	        divider: 52,
	        title: 'Over 52 Weeks',
	        suffix: '/wk'
	    }]
	});

if(typeof $.fn.jStyle === 'function'){
    form.jStyle();
}
});
</script>
<script type="text/javascript">


</script>


@yield('scripts')



</body>
</html>
