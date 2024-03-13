<h1 class="cent">新增主選單</h1>
<hr>
<form action="./api/add.php" method="post" enctype="multipart/form-data">
    <table style="margin: auto;">
    <tr>
        <td>主選單名稱:</td>
        <td><input type="text" name="text" id=""></td>
    </tr>
    <tr>
        <td>主選單連結網址:</td>
        <td><input type="text" name="href" id=""></td>
    </tr>
    </table>
    <div class="cent">
        <input type="hidden" name="menu_id" value="0">
        <input type="hidden" name="table" value="<?=$_GET['table']; ?>">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div>
</form>
