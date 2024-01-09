
class RansomNote {
    public boolean canConstruct(String ransomNote, String magazine) {
        int[] aplha=new int[26];
        for(int i=0;i<magazine.length();i++)
        {
            aplha[magazine.charAt(i)-'a']++;
        }
        for(int i=0;i<ransomNote.length();i++)
        {
            if(--aplha[ransomNote.charAt(i)-'a']< 0)
            {
                return false;
            }
        }
        return true;
    }
}