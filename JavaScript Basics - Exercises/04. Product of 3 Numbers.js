function product(arr) {
    let bool = true;

    for (let i = 0; i < 3; i++) {
        if (Number(arr[i]) < 0) {
            if (!bool) {
                bool = true;
            } else
                bool = false;
        }
    }

    if(bool){
        console.log("Positive");
    } else
        console.log("Negative");
}

