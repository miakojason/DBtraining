function clean() {
    $("input[type='text'],input[type='password'],input[type='number'],input[type='radio']").val("");
}
function reg() {
    let user = {
        acc: $("#acc").val(),
        pw: $("#pw").val(),
        pw2: $("#pw2").val(),
        email: $("#email").val()
    }
    if (user.acc != '' && user.pw != '' && user.pw2 != '' && user.email != '') {
        if (user.pw == user.pw2) {
            $.post("./api/check_acc.php", { acc: user.acc }, (res) => {
                if (parseInt(res) == 1) {
                    alert("帳號重覆")
                } else {
                    $.post("./api/reg.php", user, (res) => {
                        // location.reload(),
                        alert('註冊完成')
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
function forget(){
    $.post("./api/forget.php",{email:$("#email").val()},(res)=>{
        $("#result").text(res)
    })
}