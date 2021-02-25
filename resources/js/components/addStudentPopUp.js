function popUp() {
    let state= false;

    if(document.querySelector("#add_student")) {
        const btn = document.querySelector("#add_student");

        if(state) {
            const closeBtn = document.querySelector(".close")
                closeBtn.addEventListener('click',()=>{
                    state=false;
                    document.querySelector(".popUp").style.display="none";
                })
        }
      
        btn.addEventListener('click',()=>{
            state= !state;
            if (state) {
                document.querySelector(".popUp").style.display="block";
                const closeBtn = document.querySelector(".close")
                closeBtn.addEventListener('click',()=>{
                    state=false;
                    document.querySelector(".popUp").style.display="none";
                })
                
            }
            else {
                document.querySelector(".popUp").style.display="none";
               
            }
        })

    }




}

export {popUp};