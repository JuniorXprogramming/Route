function deleteSweet(e, id) {
  e.preventDefault();
  const elemForm = document.getElementById(id)
  Swal.fire({
    title: "Are you sure?",
    text: "คุณต้องการลบข้อมูลใช่หรือไม่",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes, delete it!"
}).then((result) => {
    if (result.isConfirmed) {
        elemForm.submit();
        Swal.fire({
            title: "Deleted!",
            text: "Your file has been deleted.",
            icon: "success"
        });
    }
});
}
