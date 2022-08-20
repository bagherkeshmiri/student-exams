
    function mboxDelete(url) {
        Swal.fire({
            title: 'آیا برای حذف مطمئن هستید ؟',
            text: "اطلاعات وابسته حذف خواهند شد!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'لغو عملیات',
            confirmButtonText: 'بله, حذف کن!',
        }).then((result) => {
            if (result.value) {
                window.location.href = url;
            }
        })
    }


    function mbox(caption, icon = 'info') {
        Swal.fire({
            title: "اطلاع رسانی",
            text: caption,
            icon: icon,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: "باشه",
            imageWidth: 80,
            imageHeight: 80,
        })
    }

    function mboxQuestion(caption, url) {
        Swal.fire({
            title: "سوال",
            text: caption,
            icon: 'question',
            showCancelButton: true,
            cancelButtonText: "انصراف",
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: "تایید",
        }).then((result) => {
            if (result.value) {
                window.location.href = url;
            }
        })
    }

    function mboxHtml(html, title = "اطلاع رسانی") {
        Swal.fire({
            title: title,
            html: html,
            icon: 'info',
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: "بستن",
        })
    }

    function mboxAlert(caption, icon = 'success') {
        Swal.fire({
            position: 'top',
            icon: icon,
            title: caption,
            showConfirmButton: false,
            timer: 1500
        })
    }

    function toastAlert(message, icon = 'success') {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 5000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        Toast.fire({
            icon: icon,
            title: message
        })
    }

