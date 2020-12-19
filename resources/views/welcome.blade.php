<!DOCTYPE html>
<html>
<head>
<title>Student Management | Add</title>
</head>
<body>
@if (session('status'))
<div class="alert alert-success" role="alert">
    <button type="button" class="close" data-dismiss="alert">×</button>
    {{ session('status') }}
</div>
@elseif(session('failed'))
<div class="alert alert-danger" role="alert">
    <button type="button" class="close" data-dismiss="alert">×</button>
    {{ session('failed') }}
</div>
@endif
<form action = "/create" method = "post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    <table border="solid 2px" >
    <tr>
    <td colspan="2">აეროპორტის რეგისტრაცია</td>
    <tr>
    <tr>
    <td>საიდენთიფიკაციო კოდი</td>
    <td><input type='text' name='IDcode' /></td>
    <tr>
    <td>სახელი</td>
    <td><input type="text" name='AirportName'/></td>
    </tr>
    <tr>
    <td>ქვეყანა</td>
    <td><input type="text" name='State'/></td>
    </tr>
    <tr>
    <td>ქალაქი</td>
    <td><input type="text" name='City'/></td>
    </tr>
    <td>დროის სარტყელი</td>
    <td><input type="text" name='TimeLine'/></td>
    </tr>
    <tr>
    <td colspan = '2'>
    <input type = 'submit' value = "აეროპორტის დამატება"/>
    </td>
    </tr>
    </table>
</form>
<br><br>
<form action = "/create" method = "post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    <table border="solid 2px" >
    <tr>
    <td colspan="2">ფრენის რეგისტრაცია</td>
    <tr>
    <tr>
    <td>საიდენთიფიკაციო კოდი</td>
    <td><input type='text' name='IDcode' /></td>
    <tr>
    <td>საწყისი ადგილი</td>
    <td><input type="text" name='AirportName'/></td>
    </tr>
    <tr>
    <td>დანიშნულების ადგილი</td>
    <td><input type="text" name='State'/></td>
    </tr>
    <tr>
    <td>გაფრენის ფრო</td>
    <td><input type="date" name='City'/></td>
    </tr>
    <td>ჩასვლის დრო</td>
    <td><input type="date" name='TimeLine'/></td>
    </tr>
    <tr>
    <td colspan = '2'>
    <input type = 'submit' value = "ფრენის დამატება"/>
    </td>
    </tr>
    </table>
</form>
</body>
</html>