package java;


public class GuessNumberHigherorLower extends GuessGame {
    public int guessNumber(int n) {
        int l=1;
        int mid=0;
       while(l<=n)
       {
           mid=l+(n-l)/2;
           int a=guess(mid);
           if(a==0){
               return mid;
           }
           else if(a==1)
           {
               l=mid+1;
           }
           else{
               n=mid-1;
           }
       } 
       return 0;
      
    }
}