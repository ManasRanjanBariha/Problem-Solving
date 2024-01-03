package december;
import java.util.*;
class LargestSubstringBetweenTwoEqualCharacters {
    public int maxLengthBetweenEqualCharacters(String s) {
        HashMap<Character,Integer> map=new HashMap<>();
        int len=-1;
        for(int i=0;i<s.length();i++)
        {
            char c=s.charAt(i);
            if(!map.containsKey(c))
            {
                map.put(c,i);
            }
            else{
                int dif=i-map.get(c);
                if(dif> len)
                {
                    len=dif-1;
                }
            }
        }
        return len;
    }
}