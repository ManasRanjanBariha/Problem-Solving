
class Solution {
    public String sortVowels(String s) {
        int length=s.length();
        ArrayList<Character>vowelList=new ArrayList<>();
        ArrayList<Integer>vowelPositions =new ArrayList<>();
        String vowels="aeiuouAEIOU";
        for(int i=0;i<length;i++)
        {
            char c=s.charAt(i);
            if(vowels.contains(""+c))
            {
                vowelList.add(c);
                vowelPositions.add(i);
            }
        }
        Collections.sort(vowelList);
        for(char c:vowelList){
            System.out.println(c);
        }
        // Collections.reverse(vowelList);
        char[] result=s.toCharArray();
        for(int i=0;i<vowelPositions.size();i++)
        {
            result[vowelPositions.get(i)] = vowelList.get(i);
        }
        return new String(result);
    }
}