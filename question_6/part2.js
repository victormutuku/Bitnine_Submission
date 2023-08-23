const numbers = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45];
const missingNumber = findMissingNumber(numbers);

function findMissingNumber(arr) {
    const n = arr.length + 1;
    const expectedSum = (n * (n + 1)) / 2;
    
    const actualSum = arr.reduce((sum, num) => sum + num, 0); 
    
    return expectedSum - actualSum;
}

console.log(`The missing number is: ${missingNumber}`);





