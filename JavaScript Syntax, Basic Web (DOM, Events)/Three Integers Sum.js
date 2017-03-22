function solve(str) {
    let arr = str[0].split(' ');

    let a = Number(arr[0]);
    let b = Number(arr[1]);
    let c = Number(arr[2]);

    if(a + b === c){
        if(a < b) {
            console.log(`${a} + ${b} = ${c}`)
        } else
            console.log(`${b} + ${a} = ${c}`)
    }
    else if(a + c === b){
        if(a < c) {
            console.log(`${a} + ${c} = ${b}`)
        } else
            console.log(`${c} + ${a} = ${b}`)
    }
    else if(b + c === a){
        if(b < c) {
            console.log(`${b} + ${c} = ${a}`)
        } else
            console.log(`${c} + ${b} = ${a}`)
    }
    else
        console.log('No');

}
