let fields = document.getElementsByClassName('field'); 

for (let field of fields) {
  input = field.children[0];
  label = field.children[1];
  input.addEventListener('focus', () => {
    field.children[0].style.border = "2px solid var(--dark-blue-color)";
    field.children[1].style.color = "var(--dark-blue-color)";
    field.children[1].style.backgroundColor = "var(--dark-color)";
    field.children[1].style.fontSize = ".75rem";
    field.children[1].style.top = "-.70rem";
    field.children[1].style.padding = "0 4px";
    field.children[1].style.zIndex = "1";
  });
  input.addEventListener('blur', () => {
    if(field.children[0].value == "") {
      field.children[0].style.border = "1px solid var(--divider-color)";
      field.children[1].style.color = "var(--divider-color)";
      field.children[1].style.backgroundColor = "transparent";
      field.children[1].style.fontSize = "1rem";
      field.children[1].style.top = "1.0625rem";
      field.children[1].style.padding = "0";
      field.children[1].style.zIndex = "-1";
    }else {
      field.children[0].style.border = "1px solid var(--divider-color)";
      field.children[1].style.color = "var(--divider-color)";
    }
  });
}