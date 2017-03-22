function solve(str) {
    let n = Number(str);

    for(let i = 1; i <= n; i++) {
        let bool = true;
        let strNum = i.toString();

        for(let p = 0; p < strNum.length / 2; p++) {
            if(strNum[p] !== strNum[strNum.length - 1 - p]){
                bool=false;
            }
        }

        if(bool){
            console.log(i + " ");
        }
    }
}

