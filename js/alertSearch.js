function checkPermis(value) {
    if (value == "") {
        let timerInterval;
        Swal.fire({
            title: "Please Login first",
            html: "I will close in <b></b> milliseconds.",
            timer: 4000,
            timerProgressBar: true,
            didOpen: () => {
                Swal.showLoading();
                const timer = Swal.getPopup().querySelector("b");
                timerInterval = setInterval(() => {
                    timer.textContent = `${Swal.getTimerLeft()}`;
                }, 100);
            },
            willClose: () => {
                clearInterval(timerInterval);
            }
        }).then((result) => {
            /* Read more about handling dismissals below */
            if (result.dismiss === Swal.DismissReason.timer) {
                console.log("I was closed by the timer");
            }
        });
    } else {
        window.location.href = "search.php"
    }

}