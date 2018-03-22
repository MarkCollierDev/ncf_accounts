<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NCF accounting</title>
   
   <!-- css -->
   <!-- components --> 
    <link rel="stylesheet" href="\components\css-reset\reset.css">
    <link rel="stylesheet" href="\components\bootstrap\css\bootstrap.css">
    <link rel="stylesheet" href="\components\bootstrap-datetimepicker\css\bootstrap-datetimepicker.css">
    <link rel="stylesheet" href="\components\font-awesome\css\fontawesome.css">
   
   <!-- custom-css -->
   
    <link rel="stylesheet" href="\css\style.css">
    
    @yield("css")
    
    
    
    
    
</head>
<body>
    
    
    @yield("content")
    
    
    
    
    <!-- javascript -->
    
    <!-- components -->
    <script src="\components\jquery\jquery.js"></script>
    <script src="\components\bootstrap\js\bootstrap.js"></script>
    <script src="\components\bootstrap-datetimepicker\js\bootstrap-datetimepicker.js"></script>
  
    <!-- custom js -->
    <script src="\js\app.js"></script>

    @yield("page-js")

</body>
</html>