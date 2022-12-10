function onloadcard() {
  let productsNumbers = localStorage.getItem("cartNumbers");
  if (productsNumbers) {
    document.querySelector(".cartnbr").textContent = productsNumbers;
  }
}

onloadcard();
