class Solution {
    public boolean samesign(int a,int b)
    {
        if(a >0 && b > 0)
        {
            return true;
        }
        else if( b<0 && a <0)
        {
            return true;
        }
        else{
            return false;
        }
    }
    public int[] asteroidCollision(int[] asteroids) {
        Stack<Integer>stk=new Stack<>();
        int element;
        for(int i=0;i<asteroids.length;i++)
        {
            if(stk.size() == 0 || samesign(stk.peek(),asteroids[i]))
             {
                 stk.push(asteroids[i]);
             }   
            else{
                while(stk.size() > 0 && stk.peek() > 0 && stk.peek() < Math.abs(asteroids[i]))
                    stk.pop();

                if(stk.size() ==0 || stk.peek() < 0)
                {
                    stk.push(asteroids[i]);
                }
                else if(stk.peek() == Math.abs(asteroids[i])){
                    stk.pop();
                }
            }
        }
            int []ans=new int[stk.size()];
            int i=stk.size()-1;
            while(!stk.isEmpty())
            {
                ans[i]=stk.peek();
                i--;
                stk.pop();
            }
            return ans;
        
    }
}