<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script src="js/jquery.js"></script>
    <table border="1" width="100%" cellspacing="0" cellpadding="10px">
        <tr>
          <th>newConfirmed</th>
          <th> Total Confirmed</th>
          <th>New Deaths</th>
          <th>Total Deaths</th>
          <th>Total Recovered</th>
          <th>New Recovered</th>
          <th>Date</th>
        
        </tr>
        <tbody >
            <tr id="show-global-data">

            </tr>
        </tbody>
    <script>
        $.ajax({
            url: "https://api.covid19api.com/summary",
            method:"GET",
            dataType: "JSON",
            success: function(data){
                console.log(data);
                $.each(data.Global, function(key, valueData){

                    $('#show-global-data').append('<td>'+valueData+'</td>')
                    });
            }

        })
    </script>
    
 </table>

 <table>
    <br>

    <table border="1" width="100%" cellspacing="0" cellpadding="10px">
        <tr>
            <th>Country Name </th>
            <th></th>
            <th>newConfirmed</th>
            <th> Total Confirmed</th>
            <th>Date</th>
            <th>Total Recover</th>
            
          
          </tr>
          <tbody id="show-Country-data"></tbody>
  
    <script>
        $(document).ready(function(){
           $.ajax({
            url: "https://api.covid19api.com/summary",
            method:"GET",
            dataType: "JSON",
            success: function(data){
                $.each(data.Countries.slice(0,10), function(key,valueContries){
                $('#show-Country-data').append('<tr>'+'<td>'+valueContries.Country+'</td>'+valueContries.CountryCode+'<td>'+valueContries.NewConfirmed+'</td><td>'+valueContries.TotalConfirmed+'</td><td>'+valueContries.TotalDeaths+'</td>'+'</td><td>'+valueContries.Date+'</td>'+'</td><td>'+valueContries.TotalRecovered+'</td>'+'</tr>');
            });
            }
           })
        })
    </script>
 </table>

</body>
</html>