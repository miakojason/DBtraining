<fieldset>
    <legend>帳號管理</legend>
    <form action="./edit_user.php" method="post">
        <table class="ct" style="margin: auto;">
            <tr class="clo">
                <td>帳號</td>
                <td>密碼</td>
                <td>刪除</td>
            </tr>
            <?php
            $rows = $User->all();
            foreach ($rows as $row) {
                if ($row['acc'] != 'admin') {
            ?>
                    <tr>
                        <td><?= $row['acc']; ?></td>
                        <td><?= $row['pw']; ?></td>
                        <td><input type="checkbox" name="del[]" value="<?= $row['id']; ?>"></td>
                    </tr>
            <?php
                }
            }
            ?>
        </table>
        <div class="ct">
            <input type="submit" value="確定刪除">
            <input type="reset" value="清空選取">
        </div>
    </form>
</fieldset>
<h2>新增會員</h2>
<fieldset>
    <legend>會員註冊</legend>
    <span style="color: red;">*請設定您要註冊的帳號及密碼(最常12個字元)*</span>
    <table>
        <tr>
            <td>Step1:登入帳號</td>
            <td><input type="text" name="acc" id="acc"></td>
        </tr>
        <tr>
            <td>Step2:登入密碼</td>
            <td><input type="password" name="pw" id="pw"></td>
        </tr>
        <tr>
            <td>Step3:再次確認密碼</td>
            <td><input type="password" name="pw2" id="pw2"></td>
        </tr>
        <tr>
            <td>Step4:信箱(忘記密碼時使用)</td>
            <td><input type="text" name="email" id="email"></td>
        </tr>
        <tr>
            <td>
                <input type="button" value="註冊" onclick="reg()">
                <input type="reset" value="清除" onclick="clean()">
            </td>
            <td></td>
        </tr>
    </table>
</fieldset>
<script>
    function clean() {
        $("input[type='text'],input[type='password'],input[type='radio']").val("");
    }

    function reg() {
        let user = {
            acc: $("#acc").val(),
            pw: $("#pw").val(),
            pw2: $("#pw2").val(),
            email: $("#email").val()
        }
        if (user.acc != "" && user.pw != "" && user.pw2 != "" && user.email != "") {
            if (user.pw == user.pw2) {
                $.post("./api/chk_acc.php", {
                    acc: user.acc
                }, (res) => {
                    if (parseInt(res) == 1) {
                        alert("帳號重覆")
                    } else {
                        $.post("./api/reg.php", user, (res) => {
                            location.reload()
                        })
                    }
                })
            } else {
                alert("密碼錯誤")
            }
        } else {
            alert("不可空白")
        }
    }
</script>