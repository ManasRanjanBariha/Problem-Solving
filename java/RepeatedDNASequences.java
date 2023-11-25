class Solution {
    public List<String> findRepeatedDnaSequences(String s) {
        Set set=new HashSet();
        Set repeated=new HashSet();
        for(int i=0;i+9 <s.length();i++)
        {
            String a=s.substring(i,i+10);
            if(!set.add(a)){
                repeated.add(a);
            }
        }
        return new ArrayList(repeated);
    }
}