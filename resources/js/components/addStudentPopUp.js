function popUp() {

    if(document.querySelector("#add_student")) {
        const btn = document.querySelector("#add_student");
        btn.addEventListener('click',()=>{
            console.log("hello");
        })
    }
}

export {popUp};