function checkInput(){
    if(!document.memberForm.id.value){
        alert("아이디를 입력하세요.");
        document.memberForm.id.focus();
        return;
    }
    if(!document.memberForm.pw.value){
        alert("비밀번호를 입력하세요.");
        document.memberForm.pw.focus();
        return;
    }
    if(!document.memberForm.pw_confirm.value){
        alert("비밀번호 확인을 입력하세요.");
        document.memberForm.pw_confirm.focus();
        return;
    }
    if(!document.memberForm.name.value){
        alert("이름을 입력하세요.");
        document.memberForm.name.focus();
        return;
    }
    if(!document.memberForm.email1.value){
        alert("이메일 아이디를 입력하세요.");
        document.memberForm.email1.focus();
        return;
    }
    if(!document.memberForm.email2.value){
        alert("이메일 주소를 입력하세요.");
        document.memberForm.email2.focus();
        return;
    }
    if(document.memberForm.pw.value != document.memberForm.pw_confirm.value){
        alert("비밀번호가 일치하지 않습니다.");
        document.memberForm.pw.value = "";
        document.memberForm.pw_confirm.value ="";

        document.memberForm.pw.focus();
        return;
    }
    document.memberForm.submit();
}

function resetForm(){
    document.memberForm.id.value = "";
    document.memberForm.pw.value = "";
    document.memberForm.pw_confirm.value = "";
    document.memberForm.name.value = "";
    document.memberForm.email1.value = "";
    document.memberForm.email2.value = "";

    document.memberForm.id.focus();
}