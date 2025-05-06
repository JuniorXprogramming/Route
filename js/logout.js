function logout() {
    Swal.fire({
        title: "Are you sure?",
        text: "คุณต้องการออกจากระบบใช่หรือไม่",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "LOGOUT"
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href="system/logout.php"
        }
    });
}