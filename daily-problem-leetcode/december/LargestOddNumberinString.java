package december;


class LargestOddNumberinString {
    public String largestOddNumber(String num) {
        String ans="";
        for(int i=num.length()-1;i>=0;i--)
        {
          int n=num.charAt(i);
            if(n%2==1){
                ans=num.substring(0,i+1);
                break;
            }
        }
        return ans;
    }
}