class Solution {
    public int compress(char[] chars) {
        int n=chars.length;
        StringBuilder sb=new StringBuilder();
        int freq=1;
        for(int i=0;i<n;i++)
        {
            char c=chars[i];
            while(i<n-1 && chars[i]==chars[i+1])
            {
                freq++;
                i++;
            }
            sb.append(c);
            if(freq > 1)
            {
                sb.append(freq);
            }
            freq=1;
        }
        String res=sb.toString();
        char[]ress=res.toCharArray();
        for(int i=0;i<ress.length;i++)
        {
            chars[i]=ress[i];
        }
        return ress.length;
    }
    
}