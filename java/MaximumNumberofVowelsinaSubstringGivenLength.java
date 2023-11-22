class Solution {
    public int maxVowels(String s, int k) {
        int max=0;
        String vowels="aeiou";
        int j=0;
        int count=0;
        for(int i=0;i<s.length();i++)
        {
            String c=""+s.charAt(i);
            if(i-j+1 <= k)
            {
                if(vowels.contains(""+c))
                {
                    count++;
                }
            }
            else{
                
                if(vowels.contains(""+s.charAt(j)))
                {
                    count--;
                }
                j++;
                if(vowels.contains(""+c))
                {
                    count++;
                }
            }
            max=Math.max(count,max);
        }
        return max;
    }
}