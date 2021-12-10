window.onload = () => {
    let mainWrapper = document.querySelector("#mainWrapper")
    let sidebar_content = document.getElementById("sidebarContent")

    window.onscroll = () => {

        if (Math.ceil(mainWrapper.getBoundingClientRect().bottom) <= window.innerHeight) {
            sidebar_content.classList.add('stickToBottom');
        } else {
            sidebar_content.classList.remove('stickToBottom');

        }
    }
};
