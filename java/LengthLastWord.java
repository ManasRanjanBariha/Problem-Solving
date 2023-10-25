// 55
//Optimal solution
class LengthLastWord {
    public int lengthOfLastWord(String s) {
        String str = s.trim();
        int count = 0;
        for(int i=str.length()-1;i>=0;i--){
            if(str.charAt(i) != ' '){
                count++;
            }else{
                break;
            }
        } 
        return count;
    }
}

//Better solution
class Solution {
    public int lengthOfLastWord(String s) {
        int counter=0;
        s=s.toLowerCase();
        int i=s.length()-1;
        if(s.length()==1)
        {
            return 1;
        }
        while(s.charAt(i) ==' '  )
        {
            i--;
        }
        while(i !=-1 && s.charAt(i)!=' ')
        {
            if(s.charAt(i) >='a'  && s.charAt(i) <= 'z')
            {
                counter++;
            }
            i--;
        }
        return counter;
    }
}