(() => {
  const requiredFields = document.querySelectorAll('[contenteditable]');
  const uploader = document.getElementById('uploader')
  const container = document.querySelector('.card__container')
  let data = {};
  /* --------------------------------------------------------- */
  for (let idx = 0; idx < requiredFields.length; idx++) {
    const singleField = requiredFields[idx];
    data[singleField.dataset.type] = singleField.innerText;
    //  paste event
    singleField.addEventListener('paste', (e) => {
      e.preventDefault();
      const text = e.clipboardData.getData('text/plain');
      const currentElementDataType = e.target.dataset.type;
      e.target.innerText = text;
      data[currentElementDataType] = e.target.innerText;
    });
    //   while typing
    singleField.addEventListener('keydown', (e) => {
      const currentElementDataType = e.target.dataset.type;
      data[currentElementDataType] = e.target.innerText;
      console.log(data);
    });

    console.log(data);
  }
  /** --------------------------------------------------------- */
  uploader.addEventListener('change', (e) => {
    e.preventDefault();
    const file = e.target.files[0]
    const blob = URL.createObjectURL(file);
    container.style.cssText = `background-image: url(${blob})`
  })
})();
