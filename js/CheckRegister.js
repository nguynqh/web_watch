function validateForm() {
    // Kiểm tra Họ tên không chứa ký tự đặc biệt và số
    var nameField = document.getElementById("register-name");
    var nameValue = nameField.value;  

    if (isValidName(nameValue)) {
        // Kiểm tra Email
        var Email = document.getElementById("Email");
        var EmailValue = Email.value;
        if (isValidEmail(EmailValue)) {
            var phoneNumber = document.getElementById("PhoneNumber");
            var phoneNumberValue = phoneNumber.value;
            if (isValidPhoneNumber(phoneNumberValue)) {
                var Address = document.getElementById("Address");
                var AddressValue = Address.value;
                if (!AddressValue.trim()) {
                    alert("Địa chỉ không được bỏ trống.");
                    return false; // Ngăn chặn việc submit form nếu trường hợp 1 xảy ra
                } else {
                    var passWord = document.getElementById("password-field");
                    var confirmPassWord = document.getElementById("password-field1");
                    var passWordValue = passWord.value;
                    var confirmPassWordValue = confirmPassWord.value;
                    if (!passWordValue.trim()) {
                        alert("Mật khẩu không được bỏ trống.");
                        return false; // Ngăn chặn việc submit form nếu trường hợp 1 xảy ra
                    } else if (passWordValue !== confirmPassWordValue) {
                        alert("Mật khẩu chưa trùng khớp");
                        return false;
                    } else {
                        // Nếu đến đây, có nghĩa là form hợp lệ
                        alert("Bạn đã đăng ký thành công");
                        return true;
                    }
                }
            }
        }
    }
    return false;
}


function isValidName(name) {
    // Sử dụng biểu thức chính quy để kiểm tra họ tên không chứa ký tự đặc biệt và số
    var nameRegex = /^[^\d!@#$%^&*()_+={}\[\]:;<>,.?~\\/-]+$/;
    if (!name.trim()) {
        alert("Họ và tên không được để trống.");
        return false; // Ngăn chặn việc submit form nếu trường hợp 1 xảy ra
    } else if (!nameRegex.test(name)) {
        alert("Họ và tên không được chứa ký tự đặc biệt hoặc số.");
        return false; // Ngăn chặn việc submit form nếu trường hợp 2 xảy ra
    } else {
        return true; // Cho phép submit form nếu trường hợp 3 xảy ra
    }
}
function isValidEmail(email) {
    // Sử dụng biểu thức chính quy để kiểm tra định dạng email
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if(emailRegex.test(email) === false ){
        alert("Email không hợp lệ . Vui lòng nhập lại")
    }
    else return true;
}
function isValidPhoneNumber(phoneNumber) {
    // Sử dụng biểu thức chính quy để kiểm tra số điện thoại
    var phoneRegex = /^(0\d{9})$/;
    if (!phoneNumber.trim()) {
        alert("Số điện thoại không được để trống.");
        return false; // Ngăn chặn việc submit form nếu trường hợp 1 xảy ra
    } else if (!phoneRegex.test(phoneNumber)) {
        alert("Số điện thoại không hợp lệ. Số điện thoại phải gồm 11 số và bắt đầu bằng số 0.");
        return false; // Ngăn chặn việc submit form nếu trường hợp 2 xảy ra
    } else {
        return true; // Cho phép submit form nếu trường hợp 3 xảy ra
    }
}
