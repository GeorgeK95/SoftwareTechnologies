function solve(arr) {
    arr = arr.sort((x, y) => y - x);
    let n = 3;
    if (arr.length < 3) {
        n = arr.length;
    }
    for (let i = 0; i < n; i++) {
        console.log(arr[i]);
    }
}
