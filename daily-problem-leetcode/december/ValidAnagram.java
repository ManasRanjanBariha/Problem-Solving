package december;

class ValidAnagram {
    public boolean isAnagram(String s, String t) {
        int []sa=new int[26];
        int []ta=new int[26];
        if(s.length()!=t.length())
        {
            return false;
        }
        for(int i=0;i<s.length();i++)
        {
            sa[s.charAt(i)-'a']++;
            ta[t.charAt(i)-'a']++;
        }
        for(int i=0;i<26;i++)
        {
            if(sa[i]!=ta[i])
            {
                return false;
            }
        }
        return true;
    }
}