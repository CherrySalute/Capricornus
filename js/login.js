document.loginForm.id.focus();

function chk_input(){
    if(!document.loginForm.id.value){
        alert("아이디를 입력하세요.");
        document.loginForm.id.focus();
        return;
    }
    if(!document.loginForm.pw.value){
        alert("비밀번호를 입력하세요.");
        document.loginForm.pw.focus();
        return;
    }
    document.loginForm.submit();
}

var loginInput = document.querySelector("#loginBox ul");
loginInput.addEventListener("keydown", function(e){
    if(e.keyCode == 13){
        chk_input();
    }
});