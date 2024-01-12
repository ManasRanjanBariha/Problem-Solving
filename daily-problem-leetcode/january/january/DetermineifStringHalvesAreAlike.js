// 1704

/**
 * @param {string} s
 * @return {boolean}
 */
var halvesAreAlike = function(s) {
    let vowels='aeiouAEIOU'
    let a=s.substring(0,s.length/2)
    let b=s.substring(s.length/2)
    let num1=0
    let num2=0
    for(let i=0;i<s.length/2;i++)
    {
        if(vowels.includes(a.charAt(i)))
        {
            num1++
        }
        if(vowels.includes(b.charAt(i)))
        {
            num2++
        }
    }
    return num1==num2
};