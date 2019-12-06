// Function to select nav elements
window.onload = function(){
  const selectNavElement = (element) => document.querySelector(element);

  selectNavElement('.navbar__hamburger').addEventListener('click', () => {
    selectNavElement('.navbar__hamburger').classList.toggle('active');
    selectNavElement('.navbar__list').classList.toggle('active');
  });
}
