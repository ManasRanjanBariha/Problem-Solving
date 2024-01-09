// Problem no 872 on leetcode
import java.util.*;
//   Definition for a binary tree node.
   class TreeNode {
      int val;
      TreeNode left;
      TreeNode right;
      TreeNode() {}
      TreeNode(int val) { this.val = val; }
      TreeNode(int val, TreeNode left, TreeNode right) {
          this.val = val;
          this.left = left;
          this.right = right;
      }
  }
 

class LeafSimilarTrees {
    public boolean leafSimilar(TreeNode root1, TreeNode root2) {
        List<Integer>list1=new ArrayList<>();
        List<Integer>list2=new ArrayList<>();
        getLeaves(list1,root1);
        getLeaves(list2,root2);
        if(list1.equals(list2))
        {
            return true;
        }
        return false;
    }

    public void  getLeaves(List<Integer> list,TreeNode root)
    {
        if(root==null)
        {
            return;
        }
        if(root.left==null && root.right==null)
        {
            list.add(root.val);
        }
        else{
            getLeaves(list,root.left);
            getLeaves(list,root.right);
        }
    }
}