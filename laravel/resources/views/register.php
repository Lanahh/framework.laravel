<?php
/**
 * Created by PhpStorm.
 * User: Maya
 * Date: 2016-11-19
 * Time: 3:33 PM
 */
?>
<html>

<head>
    <title>Form Example</title>
</head>

<body>
<form action = "/user/register" method = "post">
    <input type = "hidden" name = "_token"
           value = "<?php echo csrf_token() ?>">
    <table>
        <tr>
            <td>First name :</td>
            <td><input type="text" id=" " name="firstname">
        </tr>
        <tr>
            <td>Last name :</td>
            <td><input type="text" id=" " name="lastname">   </td>
        </tr>
        <tr>
            <td>Email :</td>
            <td><input type="text" id=" " name="new_email">
        </tr>
        <tr>
            <td>Password</td>
            <td><input type = "text" name = "password" /></td>
        </tr>
        <td>
            <input id="" name="gender" value="female" type="radio"
                <?php  if(isset($gender) && $gender=="female") echo "checked"?>>
            <label>Female</label>
            <input id="" name="gender" value="male" type="radio"
                <?php if(isset($gender) && $gender=="male") echo "checked"?>>
            <label>Male</label>
        </td>
        </tr>
                
    </table>
    Year:
    <select name="year" id="">
        <?php
        $i=1900;
        do{ ?>
            <option value="<?php echo $i; ?>"><?php echo $i; ?> </option>
            <?php $i++;}while($i<= date("Y"));?>
    </select>
    Month:
    <select name="month" id="" >
        <?php for($i=1;$i<=12;$i++){?>
            <option value="<?php echo $i;?>"><?php echo $i; ?></option>
        <?php }?>
    </select>
    Day:
    <select name="day" id="" >
        <?php for($i=1;$i<=31;$i++){?>
            <option value="<?php echo $i;?>"><?php echo $i; ?></option>
        <?php }?>
    </select>
    <br><input type = "submit" value = "Register" />
</form>

</body>
</html>
