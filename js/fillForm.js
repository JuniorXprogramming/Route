window.onload = fillForm

function fillForm(){
    const inputSource = document.getElementById("route-start-edit");
    const inputDes = document.getElementById("route-des-edit");
    const inputPrice = document.getElementById("route-price-edit");
    const inputDetail = document.getElementById("route-detail-edit");
    const inputId = document.getElementById("route_id_edit");
    const editDataString = localStorage.getItem('editData');
    const editData = JSON.parse(editDataString);
    if(editDataString == null){
        window.location.href = "adminMain.php"
    }

    inputId.value = editData[0];
    inputSource.value = editData[1];
    inputDes.value = editData[2];
    inputPrice.value = editData[3];
    inputDetail.value = editData[4];
    
    localStorage.removeItem("editData");
}