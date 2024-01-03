class Solution {
    public int countHomogenous(String s) {
        long res =0;
        char c[]=s.toCharArray();
        int start=0;
        for(int i=0;i<c.length;i++)
        {
            if(c[i]!=c[start])
            {
                int apear=i-start;
                while(apear >0)
                {
                    res+=apear;
                    apear-=1;
                }
                start=i;
            }
        }
        int appear=  c.length-start;
        while(appear >0)
        {
            res+=appear;
            appear--;
        }
        return (int)(res%(Math.pow(10,9)+7));
    }
}