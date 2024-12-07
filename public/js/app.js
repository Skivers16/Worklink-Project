// Sidebar page switching
const sidebarLinks = document.querySelectorAll("#sidebar a");
const sections = document.querySelectorAll(".section");

// Sidebar animation
const toggleButton = document.getElementById('toggle-btn')
const sidebar = document.getElementById('sidebar')


sidebarLinks.forEach((link) => {
  link.addEventListener("click", () => {
    const sectionId = link.getAttribute("data-section");
    sections.forEach((section) => {
      section.classList.remove("active");
    });

    document.getElementById(sectionId).classList.add("active");
  });
});

function showEditCareer(){
  document.getElementById("career_showcase").classList.remove("active");
  document.getElementById("career_showcase_edit").classList.add("active");
}

function toggleSidebar(){
  sidebar.classList.toggle('close')
}

function isFavorite(element) {
    if (element.getAttribute('src') === '/assets/cards/ic_heart_filled.svg') {
        element.setAttribute('src', '/assets/cards/ic_heart_empty.svg');
    } else {
        element.setAttribute('src', '/assets/cards/ic_heart_filled.svg');
    }
}

function showPopUp(id){
  if(id === "add"){
    document.getElementsByClassName("add_form")[0].style.display = "block";
  }else if(id === "_edit"){
    document.getElementsByClassName("add_form")[0].style.display = "block";
  }
}

function closePopUp(id){
  if(id === "add_close"){
    document.getElementsByClassName("add_form")[0].style.display = "none";
  }else if(id === "edit_close"){
    document.getElementsByClassName("edit_form")[0].style.display = "none";
  }
}

