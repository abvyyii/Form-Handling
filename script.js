function validate() {
    var user = document.getElementsByName("Abhi_user")[0]?.value || "";
    var fname = document.getElementsByName("Abhi_fname")[0]?.value || "";
    var lname = document.getElementsByName("Abhi_lname")[0]?.value || "";
    var email = document.getElementsByName("Abhi_email")[0]?.value || "";
    var extnum = document.getElementsByName("Abhi_extension_numb")[0]?.value || "";
    var phno = document.getElementsByName("Abhi_phno")[0]?.value || "";

    console.log("user:", user);
    console.log("fname:", fname);
    console.log("lname:", lname);
    console.log("email:", email);
    console.log("extnum:", extnum);
    console.log("phno:", phno);

    let user_pattern = /^[a-zA-Z0-9_.]+$/;
    let fname_pattern = /^[a-zA-Z]{1,50}$/;
    let lname_pattern = /^[a-zA-Z]{1,50}$/;
    let email_pattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    let extnum_pattern = /^[0-9+]{2,4}$/;
    let phno_pattern = /^[0-9]{7,10}$/;

    if (user && fname && lname && email && extnum && phno) {
        console.log("All fields are filled.");
        if (
            user_pattern.test(user) &&
            fname_pattern.test(fname) &&
            lname_pattern.test(lname) &&
            email_pattern.test(email) &&
            extnum_pattern.test(extnum) &&
            phno_pattern.test(phno)
        ) {
            alert("Validated but if you aren't redirected to a blank page that means you forgot to fill the gender field");
        } else {
            alert("Not Validated");
        }
    } else {
        alert("Enter All fields");
    }
}
