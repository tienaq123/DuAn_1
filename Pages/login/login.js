document.addEventListener("DOMContentLoaded", () => {
  const formLogin = document.querySelector(".form-login");
  const loginLink = document.querySelector(".login-link");
  const registerLink = document.querySelector(".register-link");
  const converImg = document.querySelector(".convert_img");

  registerLink.addEventListener("click", () => {
    formLogin.classList.add("active");
    converImg.setAttribute(
      "src",
      "https://i.pinimg.com/564x/34/f4/ca/34f4cab410f43b8cdda3cf750d46cf7c.jpg"
    );
  });

  loginLink.addEventListener("click", () => {
    formLogin.classList.remove("active");
    converImg.setAttribute(
      "src",
      "https://i.pinimg.com/564x/7a/66/0d/7a660dbc01f4454445b9eed449071c41.jpg"
    );
  });
});
