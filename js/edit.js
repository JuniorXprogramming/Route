function edit(editArray, buttonClick){
    if(buttonClick){
        localStorage.setItem('editData', JSON.stringify(editArray))
        window.location.href = "adminEditRoute.php";
    }else{
        window.location.href = "adminMain.php"
    }
}




