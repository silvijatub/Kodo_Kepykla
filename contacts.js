function sendMail() {
    var params = {
        name: document.getElementById("vardas").value,
        pavarde: document.getElementById("pavarde").value,
        email: document.getElementById("email").value,
        message: document.getElementById("message").value,
    };

    const serviceId = "service_i8aj1wg";
    const templateId = "template_37a6dys";

    emailjs
    .send(serviceId, templateId, params)
    .then((res) => {
            document.getElementById("vardas").value = "";
            document.getElementById("pavarde").value = "";
            document.getElementById("email").value = "";
            document.getElementById("message").value = "";
            console.log(res);
            alert("your message was sent successfully");
        })
    .catch((err) => console.log(err));
}