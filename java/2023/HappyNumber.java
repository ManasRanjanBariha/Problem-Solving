class Solution {
    public boolean isHappy(int n) {
        int num=n;
        Set<Integer>squares=new HashSet<>();
        while(num > 3)
        {
            int sum=iterate(num);
            if(squares.contains(sum))
            {
                return false;
            }
            else{
                squares.add(sum);
            }
            num=sum;
            
        }
        return num==1; 
    }
    public int iterate(int n)
    {
        int sum=0;
        while(n>0)
        {
           sum+=Math.pow(n%10,2);
           n/=10; 
        }
        return sum;
    }
}