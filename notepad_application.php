<html>

<head>
    <!--script type='text/javascript' src='prototype.js'></script--> 

    <!-- rpc libs , most recommanded file -->
    <script type='text/javascript' src='rpc.js'></script> 
    <!-- xml to json converting js file. -->
    <!--script type='text/javascript' src='xml2json.js'></script>  
    <script type='text/javascript' src='libs/ObjTree.js'></script-->
    <script type="text/javascript" src="./underscore.js"></script>
    <script type="text/javascript" src="./jquery-1.7.1.js"></script>
    <script type="text/javascript" src="./backbone.js"></script>
    <!-- qweb most recommanded file to html templating file. -->
    <script type="text/javascript" src="qweb.js"></script>

    <!-- ####  Really a simple jquery tabs libs files  #### -->
    <style>
        *{
            font-size: 12px;
         }
         div{
            border : 1px solid gray;
            margin:2px;
         }
         li{
            list-style-type: none;
            margin-left: -20px;
         }
         a{
            text-decoration : none;
         }
    </style>
 
    
<!--    <link type="text/css" href="libs/jquery-ui-1.7.3.custom/css/smoothness/jquery-ui-1.7.3.custom.css" rel="stylesheet" />	
    <script type="text/javascript" src="libs/jquery-ui-1.7.3.custom/js/jquery-1.3.2.min.js"></script>
    <script type="text/javascript" src="libs/jquery-ui-1.7.3.custom/js/jquery-ui-1.7.3.custom.min.js"></script>
-->
<script type='text/javascript'>
    QWeb.add_template("base.xml"); // LOAD MAIN APPLICATION TEMPLATE

    Apps = Backbone.View.extend({
        template : "main",
        id : 'body',        
		initialize: function(options){
		    this.records = options.records;

		    this.render();

		},
        events: {			
			"click a[action='add']" : "add",
			"click a[action='remove']" : "remove",
		},
		render: function(){		
		    var html = QWeb.render("main",{});
		    this.el.append(html);
		    
		},
		add: function(event){
		   // alert('add');
		    console.log("list-records",this,this.el, this.id, this.tagname);
		    this.el.find(".list-records").append('<li>test 22</li>');
		},
		remove: function(){
		    alert('remove');
		},
		onchange: function(){
		}
	});
	
    $(function(){
        new Apps({el:$("body"),'records':[]});    
    });
    	
</script> 
</head>
<body id="body">
<a href="#" class="action_add">Button</a>
</body>
</html>

