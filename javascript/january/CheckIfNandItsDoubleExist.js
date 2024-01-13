// 1346

/**
 * @param {number[]} arr
 * @return {boolean}
 */
var checkIfExist = function(arr) {
    let map={}
    for(let i=0;i<arr.length;i++)
    {
        if((2*arr[i]) in map || (arr[i]/2) in map)
        {
            return true
        }
        else{
            map[arr[i]]=i
        }
    }
    return false
};